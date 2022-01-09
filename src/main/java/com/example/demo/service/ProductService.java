package com.example.demo.service;


import com.example.demo.database.Sql2oDbHandler;
import com.example.demo.model.Product;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.sql2o.Connection;


/**
 * product service class.
 */
@Service
public class ProductService {

  @Autowired
  private Sql2oDbHandler sql2oDbHandler;

  public ProductService() {

  }

  /**
   *get product method.
   */
  public List<Product> getProducts() {
    try (Connection connection = sql2oDbHandler.getConnector().open()) {
      String query = "select ID id, NAME name, IMAGE_URL imageUrl, PRICE price, DESCRIPTION description"
          + " from PRODUCT";

      return connection.createQuery(query).executeAndFetch(Product.class);
    }
  }

  /**
   *get product method with key word.
   */
  public List<Product> getProducts(String keyword) {
    try (Connection connection = sql2oDbHandler.getConnector().open()) {
      String query = "select ID id, NAME name, IMAGE_URL imageUrl, PRICE price, DESCRIPTION description"
          + " from PRODUCT where name like :keyword";

      return connection.createQuery(query)
          .addParameter("keyword", "%" + keyword + "%")
          .executeAndFetch(Product.class);
    }
  }

}
