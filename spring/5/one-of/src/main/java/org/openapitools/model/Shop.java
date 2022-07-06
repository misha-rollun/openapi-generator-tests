package org.openapitools.model;

import java.net.URI;
import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import org.openapitools.model.ShopInfo;
import org.openapitools.jackson.nullable.JsonNullable;
import java.time.OffsetDateTime;
import javax.validation.Valid;
import javax.validation.constraints.*;
import io.swagger.v3.oas.annotations.media.Schema;


import java.util.*;
import javax.annotation.Generated;

/**
 * Shop
 */

@Generated(value = "org.openapitools.codegen.languages.SpringCodegen", date = "2022-07-07T10:48:37.835411Z[Etc/UTC]")
public class Shop {

  @JsonProperty("id")
  private String id;

  @JsonProperty("info")
  private ShopInfo info;

  public Shop id(String id) {
    this.id = id;
    return this;
  }

  /**
   * Get id
   * @return id
  */
  
  @Schema(name = "id", required = false)
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }

  public Shop info(ShopInfo info) {
    this.info = info;
    return this;
  }

  /**
   * Get info
   * @return info
  */
  @Valid 
  @Schema(name = "info", required = false)
  public ShopInfo getInfo() {
    return info;
  }

  public void setInfo(ShopInfo info) {
    this.info = info;
  }

  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Shop shop = (Shop) o;
    return Objects.equals(this.id, shop.id) &&
        Objects.equals(this.info, shop.info);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, info);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Shop {\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    info: ").append(toIndentedString(info)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

